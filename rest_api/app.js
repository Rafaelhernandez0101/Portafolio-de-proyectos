const express = require('express');
const app = express();
const bodyparser = require('body-parser');
const mongoose = require('mongoose');

app.use(bodyparser.json());


const postRoute = require('./routes/post.js');
app.use('/servicios', postRoute);

app.get('/', (req, res) => {
    res.send('prueba 1 respuesta del servidor');
});

mongoose.connect('mongodb+srv://nmb14092:Nico28095@cluster0.c82ozxr.mongodb.net/Deployments?retryWrites=true&w=majority&useUnifiedTopology=true', {
    useNewUrlParser: true,
    useFindAndModify: false,
})
    .then(() => {
        console.log('Conectado a la base de datos');
    })
    .catch((error) => {
        console.log('Error al conectar a la base de datos:', error);
    });

app.listen(10000)