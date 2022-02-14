class MediaPlayer {

    constructor() {
        this.loaded = false;
        this.playing = false;
        this.current_time = 0; // where in the track are we?
        this.volume = 50;
        this.track = null;
        this.playlist = [
            { // Track

            },
            { // Track

            }
        ];

        this.number_of_plays = {
            // 'Imagine': 45,
            // 'Enter sandman': 1,
            // 'Rain of blood': 345678
        };
    }

    loadSong(song) {
        this.track = song;
    }

    randomizeSongsOrder() {

    }

    getCurrentSongIndex() {

    }

    nextSong() {
        // get index of current song
        const current_i = this.getCurrentSongIndex();

        //  this.loadSong( +1 )
    }

    previousSong() {
        // get index of current song
        const current_i = this.getCurrentSongIndex();

        //  this.loadSong( -1 )
    }

    play() {
        this.playing = true;

        document.querySelector('#player');
        // actually play it
        // load mp3 data from the internet
    }

    pause() {
        this.playing = false;
    }

    stop() {
        this.pause();
        this.current_time = 0;
    }

    addTrackToPlaylist(track) {
        this.playlist.push(track);
    }
}

const player = new MediaPlayer;
player.play('Enter sandman');

const imagine = new Track;
imagine.title = 'Imagine';

player.addTrackToPlaylist(imagine);

const enter_sandman = new Track;
enter_sandman.title = 'Enter sandman';

player.addTrackToPlaylist(enter_sandman);