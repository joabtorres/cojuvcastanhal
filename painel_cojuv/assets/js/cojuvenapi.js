function writeUserData(userId, name, email, imageUrl) {
    firebase.database().ref('users/' + userId).set({
        username: name,
        email: email,
        profile_picture: imageUrl
    });
}

function uploadImagem(imagem) {
    // Obtenha uma referência para o serviço de armazenamento, que é usado para criar referências em seu intervalo de armazenamento
    var storage = firebase.storage();
    // Crie uma referência de armazenamento de nosso serviço de armazenamento
    var storageRef = storage.ref();
    // Upload the file and metadata
    var file = new File([imagem], imagem);
    storageRef.child(imagem).put(file);
}
function setFeed(id) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            post = JSON.parse(this.responseText);
            uploadimg(post.imagem);
            firebase.database().ref('posts/id_' + post.id).set({
                id: post.id,
                categoria: post.categoria,
                nome: post.nome,
                data: post.data,
                titulo: post.titulo,
                previo: post.previo,
                imagem: post.imagem,
                texto: post.texto,
                status: post.status
            });
            return post;
        }
    };
    xhttp.open("POST", base_url + "api/feed", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id=" + id);
}

function uploadimg(imagem) {
    var remoteimageurl = base_url+imagem;
    var filename = imagem;

    fetch(remoteimageurl).then(res => {
        return res.blob();
    }).then(blob => {
        //uploading blob to firebase storage
        firebase.storage().ref().child(filename).put(blob).then(function (snapshot) {
            return snapshot.ref.getDownloadURL();
        }).then(url => {
            console.log("Firebase storage image uploaded : ", url);
        })
    }).catch(error => {
        console.error(error);
    });
}