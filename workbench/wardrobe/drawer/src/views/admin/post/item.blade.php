<tr>
    <td class="grid__posts--title">{{ $post->title }}</td>
    <td>{{ $post->active == 1 ? "Active" : "Draft" }}</td>
    <td>
        <time datetime="{{ $post->publish_date->toISO8601String() }}">
            {{ $post->publish_date->toFormattedDateString() }}
        </time>
    </td>
    <td></td>
</tr>