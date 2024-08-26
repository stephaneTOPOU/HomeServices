<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Contracts\JsonLd;
use Artesaos\SEOTools\Contracts\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    use SEOMeta;
    use OpenGraph;
    use JsonLd;
    public function index()
    {

        SEOTools::setTitle(env('SEO_META_TITLE'));
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://www.homes-services.com/');
        SEOTools::setCanonical('https://www.homes-services.com/');
        SEOTools::opengraph()->addProperty('type', 'service');
        SEOTools::twitter()->setSite('#');
        SEOTools::jsonLd()->addImage('https://www.homes-services.com/images/logo.png');

        $posts = Post::all();

        return view('myindex', compact('posts'));
    }

    public function show($id)
    {

        $post = Post::find($id);

        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription($post->resume);
        SEOMeta::addMeta('service:published_time', $post->published_date->toW3CString(), 'property');
        SEOMeta::addMeta('service:section', $post->category, 'property');
        SEOMeta::addKeyword(["ldn services", "ldn service", "LDN Services", "LDN Services", "ldn", "LDN", "services", "Services", "Home service", "homes services"]);

        OpenGraph::setDescription($post->resume);
        OpenGraph::setTitle($post->title);
        OpenGraph::setUrl('https://www.homes-services.com/');
        OpenGraph::addProperty('type', 'service');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage($post->cover->url);
        OpenGraph::addImage($post->images->list('url'));
        OpenGraph::addImage(['url' => 'https://www.homes-services.com/images/logo.png']);
        OpenGraph::addImage('https://www.homes-services.com/images/logo.png');

        JsonLd::setTitle($post->title);
        JsonLd::setDescription($post->resume);
        JsonLd::setType('service');
        JsonLd::addImage($post->images->list('https://www.homes-services.com/images/logo.png'));


        // Namespace URI: http://ogp.me/ns/article#
        // article
        OpenGraph::setTitle('Article')
            ->setDescription('Some Article')
            ->setType('article')
            ->setArticle([
                'published_time' => 'datetime',
                'modified_time' => 'datetime',
                'expiration_time' => 'datetime',
                'author' => 'profile / array',
                'section' => 'string',
                'tag' => 'string / array'
            ]);

        // Namespace URI: http://ogp.me/ns/book#
        // book
        OpenGraph::setTitle('Book')
            ->setDescription('Some Book')
            ->setType('book')
            ->setBook([
                'author' => 'profile / array',
                'isbn' => 'string',
                'release_date' => 'datetime',
                'tag' => 'string / array'
            ]);

        // Namespace URI: http://ogp.me/ns/profile#
        // profile
        OpenGraph::setTitle('Profile')
            ->setDescription('Some Person')
            ->setType('profile')
            ->setProfile([
                'first_name' => 'string',
                'last_name' => 'string',
                'username' => 'string',
                'gender' => 'enum(male, female)'
            ]);

        // Namespace URI: http://ogp.me/ns/music#
        // music.song
        OpenGraph::setType('music.song')
            ->setMusicSong([
                'duration' => 'integer',
                'album' => 'array',
                'album:disc' => 'integer',
                'album:track' => 'integer',
                'musician' => 'array'
            ]);

        // music.album
        OpenGraph::setType('music.album')
            ->setMusicAlbum([
                'song' => 'music.song',
                'song:disc' => 'integer',
                'song:track' => 'integer',
                'musician' => 'profile',
                'release_date' => 'datetime'
            ]);

        //music.playlist
        OpenGraph::setType('music.playlist')
            ->setMusicPlaylist([
                'song' => 'music.song',
                'song:disc' => 'integer',
                'song:track' => 'integer',
                'creator' => 'profile'
            ]);

        // music.radio_station
        OpenGraph::setType('music.radio_station')
            ->setMusicRadioStation([
                'creator' => 'profile'
            ]);

        // Namespace URI: http://ogp.me/ns/video#
        // video.movie
        OpenGraph::setType('video.movie')
            ->setVideoMovie([
                'actor' => 'profile / array',
                'actor:role' => 'string',
                'director' => 'profile /array',
                'writer' => 'profile / array',
                'duration' => 'integer',
                'release_date' => 'datetime',
                'tag' => 'string / array'
            ]);

        // video.episode
        OpenGraph::setType('video.episode')
            ->setVideoEpisode([
                'actor' => 'profile / array',
                'actor:role' => 'string',
                'director' => 'profile /array',
                'writer' => 'profile / array',
                'duration' => 'integer',
                'release_date' => 'datetime',
                'tag' => 'string / array',
                'series' => 'video.tv_show'
            ]);

        // video.tv_show
        OpenGraph::setType('video.tv_show')
            ->setVideoTVShow([
                'actor' => 'profile / array',
                'actor:role' => 'string',
                'director' => 'profile /array',
                'writer' => 'profile / array',
                'duration' => 'integer',
                'release_date' => 'datetime',
                'tag' => 'string / array'
            ]);

        // video.other
        OpenGraph::setType('video.other')
            ->setVideoOther([
                'actor' => 'profile / array',
                'actor:role' => 'string',
                'director' => 'profile /array',
                'writer' => 'profile / array',
                'duration' => 'integer',
                'release_date' => 'datetime',
                'tag' => 'string / array'
            ]);

        // og:video
        OpenGraph::addVideo('http://example.com/movie.swf', [
            'secure_url' => 'https://example.com/movie.swf',
            'type' => 'application/x-shockwave-flash',
            'width' => 400,
            'height' => 300
        ]);

        // og:audio
        OpenGraph::addAudio('http://example.com/sound.mp3', [
            'secure_url' => 'https://secure.example.com/sound.mp3',
            'type' => 'audio/mpeg'
        ]);

        // og:place
        OpenGraph::setTitle('Place')
            ->setDescription('Some Place')
            ->setType('place')
            ->setPlace([
                'location:latitude' => 'float',
                'location:longitude' => 'float',
            ]);
    }
}
