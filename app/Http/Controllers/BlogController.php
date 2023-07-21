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
    public function index()
    {
        $blog = Blog::paginate(6);
        return view('Berita.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $this->validate($request, [
             'foto' => 'required',
             'judul' => 'required',
             'keterangan' => 'required',
             'deskripsi'  => 'required',
             'kategori'  => 'required'
         ]);

         $image = $request->file('foto');
         $image->storeAs('public/Fotoberita', $image->hashName());

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
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $berita = Blog::find($blog);
        return view('Berita.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        return view('Berita.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        // Temukan data berita berdasarkan ID
        $blog = Blog::find($id);

        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            // Unggah dan simpan gambar baru
            $image = $request->file('foto');
            $image->storeAs('storage/Fotoberita/', $image->hashName());

            // Hapus gambar lama jika ada
            if ($blog->foto !== null) {
                Storage::delete('storage/Fotoberita/' . $blog->foto);
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
            return redirect()->route('Berita.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        // Temukan data berita berdasarkan ID
        $blog = Blog::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($blog->foto) {
            Storage::delete('storage/Fotoberita/' . $blog->foto);
        }

        // Hapus data berita
        $blog->delete();

        return redirect()->route('Berita.index')->with('success', 'Data berita berhasil dihapus');
    }


    public function like($blogId)
    {
        // dd($blogId);
        $blog = Blog::find($blogId);
        // dd($blogId);
        $cekLike = LikeBerita::where('user_id', Auth::user()->id)->where('berita_id', $blogId)->exists();
        if ($cekLike) {
            $blog->update([
                'likes_count' =>  $blog->likes_count - 1,
            ]);
            LikeBerita::where('user_id', Auth::user()->id)->where('berita_id', $blogId)->delete();
        }
        else {
            $a = [
                'user_id' => Auth::user()->id,
                'berita_id' => (integer) $blogId,
            ];
            // dd($a);
            $blog->update([
                'likes_count' =>  $blog->likes_count + 1,
            ]);

            // LikeBerita::create($a);
            $model = new LikeBerita;
            $model->user_id = Auth::user()->id;
            $model->berita_id = (integer) $blogId;
            $model->save();
        }
        // dd($currentLike);

        return back()->with('success', 'Berhasil memberi like');
    }

    public function unlike(Blog $blog, $blogId)
    {
        $blog = Blog::find($blogId);
        $isLikedByUser = $blog->isLikedByUser();
        $blog->unlike();
        return redirect()->back();
    }
    public function comment_store(Request $request) {
        // dd($request->all());
        $user_id = Auth::user()->id;
        $blog_id = $request->blog_id;

        Comment::create([
            'user_id' => $user_id,
            'blog_id' => $blog_id,
            'comment' => $request->comment,
        ]);
        return back()->with('success', 'Berhasil membuat komentar');
    }

    public function reply_comment(Request $request) {
        // dd($request->all());
        $comment_id = $request->comment_id;
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
