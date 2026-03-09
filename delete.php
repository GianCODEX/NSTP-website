
body {
    font-family: 'Inter';
    background-color: #f0f4f8;
    display: flex;
    justify-content: center;
    padding: 50px 20px;
    margin: 0;
}

form {
    background: #ffffff;
    width: 100%;
    max-width: 450px;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}
title {
    justify-content: center;
}
h2 {
    justify-content: center;
    color: #002e5b;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 700;
}

label {
    display: block;
    font-weight: 600;
    font-size: 14px;
    color: #334155;
    margin-bottom: 5px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    box-sizing: border-box;
}

.enye-buttons {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
    justify-content: center;
}

.enye-buttons button {
    width: 50px;
    height: 45px;
    background: #e2e8f0;
    color: #002e5b;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    font-weight: bold;
    font-size: 18px;
    cursor: pointer;
    transition: 0.2s;
}

.enye-buttons button:hover {
    background: #cbd5e1;
}

/* The Submit Button */
button {
    width: 100%;
    background: #002e5b;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background: #001f3f;
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 220px;
    height: 100%;
    background-color: #2c3e50;
    color: white;
    padding-top: 40px;
    box-shadow: 2px 0 5px rgba(0,0,0,0.1);
}

.sidebar a {
    display: block;
    color: white;
    padding: 15px 20px;
    text-decoration: none;
    font-size: 16px;
}

.sidebar a:hover {
    background-color: #34495e;
}

