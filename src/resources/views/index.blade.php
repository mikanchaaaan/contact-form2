@extends('layout.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form">
    <div class="contact-form__ttl">
        <h2>お問い合わせ</h2>
    </div>
    <div class="contact-form__content">
        <form action="/contacts/confirm" class="form-group" method="post">
            @csrf
            <div class="form-group__item">
                <div class="form-group__item--label">
                    <span class="form-group__item--name">お名前</span>
                    <span class="form-group__item--required">必須</span>
                </div>
                <div class="form-group__item--content">
                    <div class="form-group__input">
                        <input class="form-group__item--box" type="text" name="name" value="{{ old('name') }}" placeholder="テスト太郎">
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group__item">
                <div class="form-group__item--label">
                    <span class="form-group__item--name">メールアドレス</span>
                    <span class="form-group__item--required">必須</span>
                </div>
                <div class="form-group__item--content">
                    <div class="form-group__input">
                        <input class="form-group__item--box" type="email" name="email" value="{{ old('email') }}" placeholder="test@example.com">
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group__item">
                <div class="form-group__item--label">
                    <span class="form-group__item--name">電話番号</span>
                    <span class="form-group__item--required">必須</span>
                </div>
                <div class="form-group__item--content">
                    <div class="form-group__input">
                        <input class="form-group__item--box" type="text" name="tel" value="{{ old('tel') }}" placeholder="09012345678">
                    </div>
                    <div class="form__error">
                        @error('tel')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group__item">
                <div class="form-group__item--label">
                    <span class="form-group__item--name">お問い合わせ内容</span>
                </div>
                <div class="form-group__item--content">
                    <textarea class="form-group__item--area" name="content" placeholder="資料をいただきたいです"></textarea>
                </div>
            </div>
            <div class="form-group__button">
                <button class="form-group__submit">送信</button>
            </div>
        </form>
    </div>
</div>
@endsection