<div>
    <!-- Alpine Counter Component -->
    <div x-data>
        <h1 x-text="$wire.count"></h1>

        <button x-on:click="$wire.increment()">Increment</button>
    </div>

    <br>

    <div x-data="{ open: @entangle('showDropdown') }">
        <button @click="open = true">Show More</button>

        <ul x-show="open" @click.away="open = false">
            <li><button wire:click="archive">Archive</button></li>
            <li><button wire:click="delete">Delete</button></li>
        </ul>
    </div>

    <br>

    <input type="text" id="datepicker">

    <script>
        new Pikaday({
            field: document.getElementById('datepicker')
        })
    </script>

</div>