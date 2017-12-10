<?php


Route::get('/', function () {

    // Creiamo i dati
    $tasks = [
        'ripassa OOP',
        'vedi documentazione Laravel',
        'continua con il progetto'
    ];

    // Passiamo i dati alla view
    return view('welcome', compact('tasks'));
});
