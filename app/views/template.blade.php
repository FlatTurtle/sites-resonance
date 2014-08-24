@extends('sitecore::template')

@section('navigation')

    <nav>
        <div class="container">
            @if (Config::get('sitecore::logo'))
            <a href="{{ URL::to('/') }}"><img id="logo" src="{{ Config::get('sitecore::logo') }}"></a>
            @else
            <a id="brand" href="{{ URL::to('/') }}">{{ $flatturtle->title }}</a>
            @endif
            <ul>
            @foreach ($blocks as $block)
                @if ($block->title == 'Louer')
                <li>
                    <a href="#{{ $block->id }}" class="btn colorful">{{ $block->title }}</a>
                </li>
                @elseif ($block->title)
                <li>
                    <a href="#{{ $block->id }}">{{ $block->title }}</a>
                </li>
                @endif
            @endforeach
            @if (Config::get('sitecore::mailchimp'))
                <li>
                    <a href="#newsletter">{{ Lang::get('sitecore::newsletter.title') }}</a>
                </li>
            @endif
            @if ($reservations)
                <li>
                    <a href="#reservations" class="btn colorful">{{ Lang::get('sitecore::reservations.title') }}</a>
                </li>
            @endif
            </ul>
        </div>
    </nav>

@show

@section('footer')

    <section id="social" class="block colorful">
        <div class="container">
            <div id="copyright">
                <a href="http://resonanceparis.tumblr.com/">Blog Resonance</a> - Document non contractuel. <br />
                Copyright &copy; {{ date('Y') }} <a href="http://rentalvalue.eu">rentalVALUE</a>. Images by <a href="http://www.artefactorylab.com/" target="_blank">ArtefactoryLab</a>. Live transport data <a href="http://flatturtle.com" target="_blank">FlatTurtle</a> & <a href="http://navitia.io/" target="_blank">navitia.io</a>.
            </div>
        </div>
    </section>

@stop
