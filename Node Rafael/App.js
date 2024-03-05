const express = require('express');
const app = express();
const bodyparser = require('body-parser');
const mongoose = require('mongoose');

app.use(bodyparser.json());


const postRoute = require('./Models/post.js');
app.use('/servicios', postRoute);

app.get('/', (req, res) => {
    res.send('prueba 1 respuesta del servidor');
});

mongoose.connect('mongodb+srv://rafaelhernandez07200:Rafael2024@cluster0.gskn9rs.mongodb.net/', {
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