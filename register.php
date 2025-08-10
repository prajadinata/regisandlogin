<!DOCTYPE html>
<html>
  <head>
    <title>Login and Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
      }
      .container {
        width: 100%;
        max-width: 400px;
        margin: 40px auto;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        padding: 24px;
      }
      .content h2 {
        text-align: center;
      }
      
      label {
        display: block;
        margin-top: 12px;
        margin-bottom: 4px;
      }
      input[type="text"], input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      button {
        width: 100%;
        padding: 10px;
        background: #3498db;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
      }

       button:hover {
        background: #2980b9;
      }
      p {
        text-align: center;
        margin-top: 16px;
      }
      a {
        color: #3498db;
        text-decoration: none;
      }
      a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <form action="#">
          <h2>Register</h2>
          <label for="fullname">Fullname</label>
          <input type="text"
