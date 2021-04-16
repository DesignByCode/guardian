
import React from 'react'
import * as ReactDOM from "react-dom";
import Charts from "../react/Charts";

const charts = document.getElementById('charts')

if(charts) {
    ReactDOM.render(<Charts/>, charts)
}

// const app = document.getElementById('app')
//
// if (app) {
//     ReactDOM.render(<App/>, app)
// }

require('alpinejs')



const previewInput = document.getElementById('avatar-input')

let previewBlock = document.getElementById('imagePreview')

function previewAvatar(e) {

    previewBlock.style.display = 'block'
    previewBlock.src = URL.createObjectURL(e.target.files[0])
}

previewInput.addEventListener('change', previewAvatar)









