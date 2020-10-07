var url = window.location.pathname.split('/');
var lok2 = url[2];
var lok1 = url[1];
var lok3 = url[3];

$(document).ready(function () {
    setActive();
    // tgl_mulai();
});

function setActive() {
    if(lok2 === undefined || lok2 === ''){
        $('.navbar-nav #dashboard').addClass('active');
    }else {
        $('.navbar-nav #'+lok2).addClass('active');
    }
    // if(lok2 === 'info'){
    //     $('#colapse-profile').addClass('active');
    //     $('.collapsible-body').attr('style','display:block');
    //     $('#'+lok3).addClass('active');
    // }else if(lok2 === 'kost' || lok2 === 'kontrakan' || lok2 === 'persewaan' || lok2 === 'guest-house'){
    //     // $('#colapse_property').addClass('active');
    //     $('.collapsible-body').attr('style','display:block');
    //     // $('#'+lok3).addClass('active');
    // }
}

async function handleImageUpload(event)  {
    // console.log(event);
    // const files = event.target.files;
    const files = event[0].files;
    var data = '';
    for (var i = 0; i < files.length; i++) {
        // console.log("FILE ", imageFile)
        const imageFile = files[i];
        console.log('originalFile instanceof Blob', imageFile instanceof Blob); // true
        console.log(`originalFile size ${imageFile.size / 1024 / 1024} MB`);

        const options = {
            maxSizeMB: 0.5,
            maxWidthOrHeight: 1000,
            useWebWorker: true
        };
        try {
            const compressedFile = await imageCompression(imageFile, options);// smaller than maxSizeMB
            data = compressedFile;

        } catch (error) {
            console.log(error);
            data = 'error'
        }

    }
    return data;

}
