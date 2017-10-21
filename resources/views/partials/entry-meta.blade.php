<p class="date-updated"><time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time></p>
<p class="byline author vcard"> |
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}</a></br>{!! sprintf(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
</p>
