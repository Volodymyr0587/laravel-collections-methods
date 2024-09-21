<ul>
    <li>Count</li>
    <p>{{ $count }}</p>
    <li>Where</li>
    <p>{{ $where }}</p>
    <li>countBy</li>
    <p>{{ $countBy }}</p>
    <li>max</li>
    <p>{{ $max }}</p>
    <li>maxWithWhereBetween</li>
    <p>{{ $maxWithWhereBetween }}</p>
    <li>min</li>
    <p>{{ $min }}</p>
    <li>median</li>
    <p>{{ $median }}</p>
    <li>mode</li>
    <p>{{ implode(' ', $mode) }}</p>
    <li>mostCommonUserID</li>
    <p>{{ implode(' ', $mostCommonUserID) }}</p>
    <li>inRandomOrder</li>
    <p>{{ $inRandomOrder }}</p>
    <li>sum</li>
    <p>Total mins to read: {{ $sum }}</p>

</ul>
