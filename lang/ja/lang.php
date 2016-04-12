<?php

return [
    'plugin' => [
        'name' => 'ブログ',
        'description' => 'ロバストなブログプラットフォームです。'
    ],
    'blog' => [
        'menu_label' => 'ブログ',
        'menu_description' => 'ブログの投稿管理',
        'posts' => '投稿',
        'create_post' => '投稿の追加',
        'categories' => 'カテゴリ',
        'create_category' => 'カテゴリの追加',
        'tab' => 'ブログ',
        'access_posts' => '投稿の管理',
        'access_categories' => 'カテゴリの管理',
        'access_other_posts' => '他ユーザーの投稿の管理',
        'delete_confirm' => '削除していいですか？',
        'chart_published' => '公開済み',
        'chart_drafts' => '下書き',
        'chart_total' => '合計'
    ],
    'posts' => [
        'list_title' => '投稿の管理',
        'category' => 'カテゴリ',
        'hide_published' => '下書きのみ',
        'new_post' => '投稿を追加'
    ],
    'post' => [
        'title' => 'タイトル',
        'title_placeholder' => 'タイトルを入力してください',
        'slug' => 'スラッグ',
        'slug_placeholder' => 'new-post-slug−123',
        'categories' => 'カテゴリ',
        'created' => '作成日',
        'updated' => '更新日',
        'published' => '公開する',
        'published_validation' => '投稿の公開日を指定してください。',
        'tab_edit' => '編集',
        'tab_categories' => 'カテゴリ',
        'categories_comment' => '投稿を関連付けるカテゴリを選択してください。(複数選択可)',
        'categories_placeholder' => 'まだカテゴリがありません。先に作成してください。',
        'tab_manage' => '管理',
        'published_on' => '公開日',
        'excerpt' => '投稿の抜粋',
        'featured_images' => 'アイキャッチ画像',
        'delete_confirm' => '削除していいですか？',
        'close_confirm' => '投稿は保存されていません。',
        'return_to_posts' => '投稿一覧に戻る'
    ],
    'categories' => [
        'list_title' => 'カテゴリ管理',
        'new_category' => 'カテゴリの追加',
        'uncategorized' => '未分類'
    ],
    'category' => [
        'name' => '名前',
        'name_placeholder' => 'カテゴリ名をつけてください',
        'slug' => 'スラッグ',
        'slug_placeholder' => 'new-category-slug-123',
        'posts' => '投稿数',
        'delete_confirm' => '削除していいですか？',
        'return_to_categories' => 'カテゴリ一覧に戻る'
    ],
    'settings' => [
        'category_title' => 'カテゴリリスト',
        'category_description' => 'ページ内にカテゴリリストを表示します。',
        'category_slug' => 'カテゴリスラッグ',
        'category_slug_description' => "表示するカテゴリのスラッグを指定します。この項目はコンポーネントのデフォルトパーシャルで使用されます。",
        'category_display_empty' => '空のカテゴリの表示',
        'category_display_empty_description' => 'この項目がチェックされている場合、投稿が0件のカテゴリもリストに表示します。',
        'category_page' => 'カテゴリページ',
        'category_page_description' => 'カテゴリページへのリンクを生成するために、カテゴリページのファイル名を指定します。この項目はコンポーネントのデフォルトパーシャルで使用されます。',
        'post_title' => '投稿',
        'post_description' => 'ページ内に投稿を表示します。',
        'post_slug' => '投稿スラッグ',
        'post_slug_description' => "表示する投稿のスラッグを指定します。特定の投稿のスラッグか、URLパラメータ(:slug)を指定できます。",
        'post_category' => 'カテゴリページ',
        'post_category_description' => 'カテゴリリンクを生成するために、カテゴリページのファイル名を指定します。拡張子(.htm)は省いてください。この項目はコンポーネントのデフォルトパーシャルで使用されます。',
        'posts_title' => '投稿リスト',
        'posts_description' => 'ページ内に新しい投稿のリストを表示します。',
        'posts_pagination' => 'ページ番号',
        'posts_pagination_description' => 'ページ番号を指定します。URLパラメータ(:page)を指定できます。',
        'posts_filter' => 'カテゴリフィルタ',
        'posts_filter_description' => '投稿リストのフィルタを指定します。カテゴリのスラッグかURLパラメータ(:slug)を指定できます。空の場合、すべての投稿が表示されます。',
        'posts_per_page' => '1ページに表示する投稿数を指定します。',
        'posts_per_page_validation' => '1ページに表示する投稿数の形式が正しくありません。',
        'posts_no_posts' => '0件時メッセージ',
        'posts_no_posts_description' => 'この投稿リストが0件の場合に表示するメッセージを指定します。この項目はコンポーネントのデフォルトパーシャルで使用されます。',
        'posts_order' => '並び順',
        'posts_order_description' => '投稿リスト内の並び順を指定します。',
        'posts_category' => 'カテゴリページ',
        'posts_category_description' => 'カテゴリリンクを生成するために、カテゴリページのファイル名を指定します。この項目はコンポーネントのデフォルトパーシャルで使用されます。',
        'posts_post' => '投稿ページ',
        'posts_post_description' => '"Learn more"リンクを生成するため、投稿ページのファイル名を指定します。拡張子(.htm)は省いてください。この項目はコンポーネントのデフォルトパーシャルで使用されます。',
        'posts_except_post' => 'Except post',
        'posts_except_post_description' => 'Enter ID/URL or variable with post ID/URL you want to except',
    ]
];
