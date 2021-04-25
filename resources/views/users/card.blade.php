<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
    </div>
    <div class="card-body">
    {{-- プロフィール --}}
                <div class="form-group">
                    {!! Form::label('birth_ymd', '生年月日：') !!}
                    {!! nl2br(e($user->birth_ymd)) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('profile', 'プロフィール：') !!}
                    {!! nl2br(e($user->profile)) !!}
                </div>
</div>
</div>

{{-- フォロー／アンフォローボタン --}}
@include('user_follow.follow_button')

@if (Auth::id() == $user->id)
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['users.profile',$user->id], 'method' => 'get']) !!}
            {!! Form::submit('profile', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
@endif
