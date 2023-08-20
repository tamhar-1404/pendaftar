<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\LikeBerita;
use App\Models\ReplyComment;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\BeritaTerkini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth()->user()->role == 'Admin'){
            if ($request->has('cari')) {
                $keyword = $request->cari;
                $blog = Blog::Where('judul', 'LIKE', '%' . $keyword . '%')->orWhere('tanggal', 'LIKE', '%' . $keyword . '%')->latest()->paginate(8);
                return view('Berita.index', compact('blog'));

                $blog->appends(['cari' => $keyword]);

                return view('Berita.index', compact('blog'));
            }

            $blog = Blog::latest()->paginate(8);
            return view('Berita.index', compact('blog'));
        }else{
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth()->user()->role == 'Admin'){
            return view('Berita.create');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in Storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
        if(Auth()->user()->role == 'Admin'){
            $this->validate($request, [
                'foto' => 'required|image|mimes:png,jpg,jpeg',
                'judul' => 'required|max:225',
                'keterangan' => 'required|max:225',
                'deskripsi'  => 'required',
                'kategori'  => 'required'
            ],[
                'judul.max' => 'judul maksimal 225 karakter',
                'keterangan.max' => 'keterangan maksimal 225 karakter'
            ]);

            $image = $request->file('foto');
            $image->storeAs('public/fotoberita', $image->hashName());

            $berita = Blog::create([
                'name' => auth()->user()->name,
                'foto' => $image->hashName(),
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'tanggal' => Carbon::now()->format('Y-m-d'),
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori
            ]);

            $emails = User::whereIn('role', ['siswa', 'guru'])->pluck('email')->toArray();

            foreach ($emails as $email) {
                Mail::to($email)->send(new BeritaTerkini($berita));
            }

            return redirect()->route('Berita.index')->with('success', 'Data berita berhasil Ditambah');
        }else{
            return redirect()->back();
        }
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        if(Auth()->user()->role == 'Admin'){
            $berita = Blog::find($blog);
            return view('Berita.detail', compact('berita'));
        }else{
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        if(Auth()->user()->role == 'Admin') {
            $blog = Blog::find($id);
            return view('Berita.edit', compact('blog'));
        }else{
            return redirect()->back();
        }
    }
    public function Cek()
    {
       $data = LikeBerita::where('user_id', Auth()->user()->id)->get();
       return response()->json($data);
    }

    /**
     * Update the specified resource in Storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        if(Auth()->user()->role == 'Admin'){
            $blog = Blog::find($id);
            if ($request->hasFile('foto')) {
                $this->validate($request, [
                    'judul' => 'required|max:225',
                    'foto' => 'required|mimes:png,jpg,jpeg|image',
                    'keterangan' => 'required|max:225',
                    'deskripsi' => 'required',
                    'kategori' => 'required'
                ],[
                    'judul.max' => 'judul maksimal 225 karakter',
                    'keterangan.max' => 'judul maksimal 225 karakter',
                ]);
                // Unggah dan simpan gambar baru
                $image = $request->file('foto');
                $image->storeAs('public/fotoberita', $image->hashName());

                // Hapus gambar lama jika ada
                if ($blog->foto !== null) {
                    Storage::delete('public/fotoberita/' . $blog->foto);
                }

                // $blog->foto = $image->hashName();

                $blog->update([
                    'foto' => $image->hashName(),
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'tanggal' => $request->tanggal,
                    'deskripsi' => $request->deskripsi,
                    'kategori' => $request->kategori
                ]);
                return redirect()->route('Berita.index')->with('success', 'Berhasil memperbarui berita');
            } else {
                $this->validate($request, [
                    'judul' => 'required|max:225',
                    'keterangan' => 'required|max:225',
                    'deskripsi' => 'required',
                    'kategori' => 'required'
                ],[
                    'judul.max' => 'judul maksimal 225 karakter',
                    'keterangan.max' => 'judul maksimal 225 karakter',
                ]);
                $blog->update([
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'tanggal' => $request->tanggal,
                    'deskripsi' => $request->deskripsi,
                    'kategori' => $request->kategori,
                ]);
                return redirect()->route('Berita.index')->with('success', 'Berhasil memperbarui berita');
            }
        }else{
            return redirect()->back();
        }
        // Temukan data berita berdasarkan ID
    }

    /**
     * Remove the specified resource from Storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $blog = Blog::find($id);
        if(Auth()->user()->role == 'Admin'){
            $blog = Blog::findOrFail($id);
            if ($blog->foto) {
                if (Storage::exists('storage/fotoberita')) {
                    Storage::delete('storage/fotoberita/' . $blog->foto);
                }
            }
            $relatedChildIds = $blog->comments->pluck('id');
            Comment::whereIn('id', $relatedChildIds)->delete();
            $blog->delete();

             if (!$blog) {
                 return redirect()->route('Berita.index')->with('error', 'Data berita tidak ditemukan');
             }

             if ($blog->foto) {
                 Storage::delete('Storage/Fotoberita/' . $blog->foto);
             }

             $relatedChildIds = $blog->comments->pluck('id');
             Comment::whereIn('id', $relatedChildIds)->delete();
             $blog->delete();

             return redirect()->route('Berita.index')->with('success', 'Data berita berhasil dihapus');
         } else {
             return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus berita');
         }
     }


     public function like(Request $request)
     {
         $blogId = $request->id; // Ubah $blogid menjadi $blogId (penamaan variabel case-sensitive)

         $blog = Blog::find($blogId);

         if (!$blog) {
             return response()->json([
                 'status' => 'error',
                 'message' => 'Berita tidak ditemukan.',
             ], 404);
         }
        //  return $blog;

         $user = Auth()->user();

         $cekLike = LikeBerita::where('user_id', $user->id)->where('berita_id', $blogId)->exists();

         if ($cekLike) {
            $blog->update([
                'likes_count' => $blog->likes_count -1,
            ]);
             LikeBerita::where('user_id', $user->id)->where('berita_id', $blogId)->delete();
             return response()->json([
                 'status' => 'success',
                 'action' => 'hapus',
             ]);
         } else {
            $blog->update([
                'likes_count' => $blog->likes_count +1,
            ]);

            $blog->update([
                'like_count'
            ]);
             LikeBerita::create([
                 'user_id' => Auth()->user()->id,
                 'berita_id' => $blogId
             ]);
             return response()->json([
                 'status' => 'success',
                 'action' => 'tambah',
             ]);
        }
     }


    public function unlike(Blog $blog, $blogId)
    {
        $blog = Blog::find($blogId);
        $isLikedByUser = $blog->isLikedByUser();
        $blog->unlike();
        return redirect()->back();
    }
    public function comment_store(Request $request) {
        $request->validate([
            'blog_id' => 'required',
            'comment' => 'required',
        ]);
        $user_id = Auth::user()->id;
        if (!Blog::where('id', $request->blog_id)->exists()) {
            return back()->with('error', 'Berita tidak ditemukan');
        }
        $blog_id = $request->blog_id;

        Comment::create([
            'user_id' => $user_id,
            'blog_id' => $blog_id,
            'comment' => $request->comment,
        ]);
        return back()->with('success', 'Berhasil membuat komentar');
    }

    public function reply_comment(Request $request) {
        $request->validate([
            'comment_id' => 'required',
            'comment' => 'required',
        ]);

        $comment_id = $request->comment_id;
        if (!Comment::where('id', $comment_id)->exists()) {
            return back()->with('error', 'Komentar tidak ditemukan');
        }
        $user_id = Auth::user()->id;
        $comment = $request->comment;

        ReplyComment::create([
            'comment_id' => $comment_id,
            'user_id' => $user_id,
            'comment' => $comment,
        ]);
        return back()->with('success', 'Berhsil membalas komentar');
    }
}
