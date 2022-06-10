const myString = window.location.search;
        console.log(myString);
        const urlParams = new URLSearchParams(myString);
        const email = urlParams.get('m1');
        console.log(email);
        const cid = urlParams.get('cid');
        console.log(cid);
        const tid = urlParams.get('tid');
        console.log(tid);
        
        
    
if(!navigator.getDisplayMedia && !navigator.mediaDevices.getDisplayMedia) {
    var error = 'Your browser does NOT supports getDisplayMedia API.';
    document.querySelector('h1').innerHTML = error;

    document.querySelector('video').style.display = 'none';
    document.getElementById('btn-start-recording').style.display = 'none';
    document.getElementById('btn-stop-recording').style.display = 'none';
    throw new Error(error);
}

function invokeGetDisplayMedia(success, error) {
    var displaymediastreamconstraints = {
        video: {
            displaySurface: 'monitor', // monitor, window, application, browser
            logicalSurface: true,
            cursor: 'always' // never, always, motion
        }
    };

    // above constraints are NOT supported YET
    // that's why overridnig them
    displaymediastreamconstraints = {
        video: true
    };

    if(navigator.mediaDevices.getDisplayMedia) {
        navigator.mediaDevices.getDisplayMedia(displaymediastreamconstraints).then(success).catch(error);
    }
    else {
        navigator.getDisplayMedia(displaymediastreamconstraints).then(success).catch(error);
    }
}

function captureScreen(callback) {
    invokeGetDisplayMedia(function(screen) {
        addStreamStopListener(screen, function() {
             document.getElementById('btn-stop-recording').click();
        });
        callback(screen);
    }, function(error) {
        console.error(error);
       // var b = document.getElementById("mybut");
      //  b.style.visibility = 'hidden';
        //alert('Unable to capture your screen. Please check console logs.\n' + error);
        // document.getElementById("nocamera").innerHTML+="Please Share your screen to give test !!";
        swal({
                        title: "Screen sharing cancelled",
                        text: "You Can't give the test without screen sharing!!",
                        icon: "warning",
                        buttons: false,
                        closeOnEsc: false,
                        closeOnClickOutside: false
                    });
        
    });
}

function captureCamera(cb) {
    navigator.mediaDevices.getUserMedia({audio: true, video: true}).then(cb).catch(function(err) {
     //   var b = document.getElementById("mybut");
      //  b.style.visibility = 'hidden';
  /* handle the error */
  swal({
                        title: "Camera access cancelled",
                        text: "You Can't give the test without camera access!!",
                        icon: "warning",
                        buttons: false,
                        closeOnEsc: false,
                        closeOnClickOutside: false
                    });
});
 //navigator.mediaDevices.getUserMedia({audio: true, video: true}).then(cb);
}

function keepStreamActive(stream) {
    var video = document.createElement('video');
    video.muted = false;
    video.srcObject = stream;
    video.style.display = 'none';
    (document.body || document.documentElement).appendChild(video);
}

captureScreen(function(screen) {
    keepStreamActive(screen);
    captureCamera(function(camera) {
        keepStreamActive(camera);

        // screen.width = window.screen.width;
        // screen.height = window.screen.height;
        screen.width = 640;
        screen.height = 360;
        screen.fullcanvas = true;
        
        // camera.width = 320;
        // camera.height = 240;
        camera.width= 200;
        camera.height = 130;
        camera.top = screen.height - camera.height;
        camera.left = screen.width - camera.width;
        
        var recorder = RecordRTC([screen, camera], {
            type: 'video',
            mimeType: 'video/webm',
            canvas: {
            width: 640,
            height: 360
            },
            frameInterval: 200,
            numberOfAudioChannels: 2,
            frameRate: 15,
            previewStream: function(s) {
                document.querySelector('video').muted = true;
                document.querySelector('video').srcObject = s;
            }
        });

        recorder.startRecording();
        
        function stopRecordingCallback() {
            

            recorder.stopRecording(function() {
                getSeekableBlob(recorder.getBlob(), function(seekableBlob) {
                    var fileName = getFileName('webm');
                    document.cookie = "upload-name= " + fileName; 
                //    fetchRadioValue(fileName);
                    var fileobject = new File([seekableBlob], fileName, {
                    type: 'webm'
                    })
                    var serverUrl = 'https://phptest.avianglobes.com/oc/upload-video.php';
                    var formData = new FormData();
                    formData.append('email',email);
                    formData.append('cid',cid);
                    formData.append('tid',tid);
                    formData.append('video',fileobject);
                    formData.append('video-filename',fileobject.name);
                
                    console.log('upload recording ' + fileobject.name + ' to ' + serverUrl);
                   
                      swal({
                        title: "Your Video is being uploaded",
                        text: "Please wait Until You Get Success alert!",
                        buttons: false,
                        closeOnEsc: false,
                        closeOnClickOutside: false
                    });
                    // start upload
                    fetch(serverUrl, {
                    method: 'POST',
                    body: formData
                    }).then(
                    success => swal({
                      title: "Video is uploaded.",
                      text: "Click on OK button.",
                      icon: "success",
                      closeOnEsc: false,
                      closeOnClickOutside: false
                    }).then(function() {
                        document.getElementById("myform1").submit();
                    })
                    ).catch(
                    error => swal({
                        title: "Sorry your video was not uploaded",
                        text: "Please contact your recruiter for retest.",
                        icon: "error",
                        closeOnEsc: false,
                        closeOnClickOutside: false
                        
                    }).then(function() {
                        document.getElementById("myform1").submit();
                    })
                    );
                    //video.src = URL.createObjectURL(seekableBlob);
                    document.querySelector('video').srcObject = null;
                    document.querySelector('video').src = URL.createObjectURL(seekableBlob);
                    document.querySelector('video').muted = true;
                    [screen, camera].forEach(function(stream) {
                        stream.getTracks().forEach(function(track) {
                            track.stop();
                        });
                      });
               });//seekableblob
              // location.href="demo.php";
            });//stoprecordingfunction
            console.log("heyyyy");
        };//stoprecordingcallback
            jQuery(document).on( 'click', "#btn-stop-recording", function( event ) {
            stopRecordingCallback();
            event.preventDefault();
            //fetchRadioValue();
          //  document.getElementById("myform1").submit();
            this.disabled = true;
         //   document.getElementById('myForm').style.display = 'none';
        //    document.getElementById('timer').style.display = 'none';
        //    document.getElementById("left").innerHTML = "Time Over";
           
            });
        //window.timeout = setTimeout(stopRecordingCallback, 1800 * 1000);

       
        // document.getElementById('btn-stop-recording').onclick = function() {
    
        // window.stopCallback();
    //      document.getElementById('btn-stop-recording').onclick = function() {
    // this.disabled = true;
    // stopRecordingCallback();

// };

    });
   
});

function addStreamStopListener(stream, callback) {
    stream.addEventListener('ended', function() {
        callback();
        callback = function() {};
    }, false);
    stream.addEventListener('inactive', function() {
        callback();
        callback = function() {};
    }, false);
    stream.getTracks().forEach(function(track) {
        track.addEventListener('ended', function() {
            callback();
            callback = function() {};
        }, false);
        track.addEventListener('inactive', function() {
            callback();
            callback = function() {};
        }, false);
    });
}
function getFileName(fileExtension) {
                var d = new Date();
                var year = d.getUTCFullYear();
                var month = d.getUTCMonth();
                var date = d.getUTCDate();
                return 'RecordRTC-' + year + month + date + '-' + getRandomString() + '.' + fileExtension;
            }

            function getRandomString() {
                if (window.crypto && window.crypto.getRandomValues && navigator.userAgent.indexOf('Safari') === -1) {
                    var a = window.crypto.getRandomValues(new Uint32Array(3)),
                        token = '';
                    for (var i = 0, l = a.length; i < l; i++) {
                        token += a[i].toString(36);
                    }
                    return token;
                } else {
                    return (Math.random() * new Date().getTime()).toString(36).replace(/\./g, '');
                }
            }
            