
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML5 Audio Playlist</title>
    <style>
        #playlist{
            list-style: none;
        }
        #playlist li a{
            color:black;
            text-decoration: none;
        }
        #playlist .current-song a{
            color:blue;
        }
    </style>
</head>
<body>
    <p>Demo Music From <a href="http://incompetech.com">incompetech.com</a></p>
    <audio src="" controls id="audioPlayer" >
        Sorry, your browser doesn't support html5!
    </audio>
    <ul id="playlist">
        26 lines (21 sloc)  1.25 KB
   
        <?php
        /*
          File Made at request of another YouTube. If you have a directory of Mp3's, and you don't want to type out each link, use this code to scan through an entire directory of links. 
          
          Requirements: Make sure that you're using a web server that supports PHP (if your webhost supports cPanel, you're all set). If your web server doesn't have PHP installed, or you are trying to use this code elsewhere (such as tumblr) this will not work. 
          
          Instructions:
          1. Rename your file extension from .html to .php (index.html should be index.php). 
          2. Paste this entire code between the unordered list ( <ul id="playlist"> CODEHERE </ul> ) 
          3. change the $fileDir value to whatever the directory containing your mp3s (must be on same server). 
              Keep the qutation marks and semicolon in tact. 
              Examples $fileDir = "audio"; $fileDir = "mp3"; $fileDir = "src/mp3";
          4. Save file, and check the webpage to make sure it's working. 
          
          Feel free to delete lines 2-17 from this. 
        */
        
                    $fileDir = "audio";
                    $files = scandir($fileDir);
                    foreach($files as $file) {
                         if(substr($file,-4) == ".mp3"){
                    echo "<li><a href='/Users/sameer/Downloads/songs/$file'>".substr($file,0,-4)."</a></li>";
                         }
                    }
        ?>
        
    </ul>
    <a href="#" onclick="playlist.prevTrack();">Prev Track</a>
    <a href="#" onclick="playlist.nextTrack();">Next Track</a>
    <a href="#" onclick="playlist.toggleShuffle();">Toggle Shuffle</a>
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="audioPlayer.js"></script>
    <script>
        
        /*
    Default constructor configuration:
        autoplay: false,
        shuffle: false,
        loop: false,
        playerId: "audioPlayer",
        playlistId: "playlist",
        currentClass: "current-song"
        
        
*/
        
        // loads the audio player
        var config = {
          autoplay: true, 
            loop: true,
            shuffle: true
        };
        var playlist = new AudioPlaylist();
        
    </script>
</body>
</html>