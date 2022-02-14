class Track {

    constructor() {
        this.id = null;
        this.artist = null; // Author object
        this.genres = [];
        this.bitrate = 128;
        this.duration = null; // in seconds
        this.title = null;
        this.lyrics = null;
        this.copyright = null;
        this.album = null;
        this.collaborating = [];
        this.cover_art = null;

        this.played_by_all_users = 0;
    }

    /**
     * insert a song into the database
     */
    insert() {

    }

    delete() {

    }

    find(id) {

    }

    setBitrate(bitrate) {
        if (typeof bitrate !== 'integer') {
            throw 'You must set a number as bitrate';
        }
    }

    secondsToFormattedString(seconds) {
        return Math.floor(seconds / 60) + ':' + seconds % 60;
    }

    /**
     * 3:45
     */
    getDurationFormatted() {
        return this.secondsToFormattedString(this.duration);
    }
}

// song.bitrate = 'abc';
const song = new Song;
song.duration = 345;
console.log( song.getDurationFormatted() );