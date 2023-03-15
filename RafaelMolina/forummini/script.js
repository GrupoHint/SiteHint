function createreplyform(){
    document.getElementById('replyform').style = `
    display: block;
    `;
}

function removespaces(){
    document.getElementsByName("name")[0].value = $nameinput;
    var slug = ($nameinput).value;
    slug = slug.replace(/\W+/g, '-').toLowerCase();
    console.log(str); // "sonic-free-games"

}


