@extends('layout.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm">
    <div class="confirm__ttl">
        <h2>お問い合わせ内容確認</h2>
    </div>
    <form action="/contacts" class="confirm-form" method="post">
        @csrf
        <div class="confirm__table">
            <table>
                <tr class="confirm__table--row">
                    <th class="confirm__table--head">お名前</th>
                    <td class="confirm__table--content">
                        <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__table--row">
                    <th class="confirm__table--head">メールアドレス</th>
                    <td class="confirm__table--content">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class=" confirm__table--row">
                    <th class="confirm__table--head">電話番号</th>
                    <td class="confirm__table--content">
                        <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm__table--row">
                    <th class="confirm__table--head">お問い合わせ内容</th>
                    <td class="confirm__table--content">
                        <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class=" confirm__button">
            <button class="confirm__submit">送信</button>
        </div>
    </form>
</div>
@endsection