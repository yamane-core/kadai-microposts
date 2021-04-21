<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
   /**
     * micropostをお気に入りするアクション。
     */
    public function store($micropost)
    {
        // 認証済みユーザ（閲覧者）が、 idのmicropostをお気に入りする
        \Auth::user()->favorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * お気に入りを外すアクション。
     */
    public function destroy($micropost)
    {
        // 認証済みユーザ（閲覧者）が、 idのicropostのお気に入りを外す
        \Auth::user()->unfavorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
