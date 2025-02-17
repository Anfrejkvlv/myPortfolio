Mon portfolio 

* {
  margin: 0;
  }

body {
font-family: 'Manrope', sans-serif;
font-size: 1em;
background-color: #1f2039;
}

a {
color: #242424;
text-decoration: none;
}

em {
color: #a5b4fc;
font-style: normal;
}

h1 {
font-size: 3.5em;
color: #a5b4fc;
font-family: 'Montserrat', sans-serif;
}

h2 {
color: #f9f8ff;
}

p,
li {
font-size: 1.1em;
color: #f9f8ff;
}

header,
footer {
background-color: white;

color: white;
text-align: center;
padding: 15px 10px;
position: relative; /* Ou `fixed` si tu veux qu'il reste toujours visible */
width: 100%;
bottom: 0;
}

.cta {
display: inline-block;
background: linear-gradient(green, aquamarine);
color: white;
border-radius: 50px;
padding: 20px 30px;
}

a:hover {
text-decoration: underline;
}

.cta:hover {
background: linear-gradient(#696484, #8788ba);
text-decoration: none;
}

.lien-icone {
margin-left: 30px;
}

.lien-icone:hover {
opacity: 0.5;
}

section {
padding: 80px;
}

footer,
nav {
display: flex;
flex-direction: row;
align-items: center;
justify-content: space-between;
}

nav a {
margin-left: 30px;
}

@media screen and (max-width: 996px) {
header nav {
flex-direction: column;
align-items: center;
justify-content: center;
}

header nav img {
margin-bottom: 20px;
}

header,
footer {
padding: 20px 20px;
}

h1 {
font-size: 2em;
}

section {
padding: 50px 20px 50px 20px;
}
main {
flex: 1; /* Permet au contenu de prendre l'espace restant */
}
nav a {
margin-left: 10px;
margin-right: 10px;
}

}
html, body {
height: 100%;
margin: 0;
display: flex;
flex-direction: column;
}


