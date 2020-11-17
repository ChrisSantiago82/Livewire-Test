<div>

    <div wire:init="loadInit">
         {{  $iniText }}
    </div>

    <table>

        <tr>
            <th>Book</th>
            <th>Chapters</th>
        </tr>

    @foreach($books as $book)
        <tr wire:key="bookkey_{{ $book->id }}">
            <td style="vertical-align: top;">{{ $book->title }}</td>
            <td>
                @foreach($book->BookChapters as $BookChapter)
                    {{ $BookChapter->chapter  }}<br />
                @endforeach
            </td>
        </tr>
    @endforeach

    </table>

</div>
