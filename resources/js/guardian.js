
// import React from 'react'
// import * as ReactDOM from "react-dom";


import Charts from "../react/Charts";
//
// const charts = document.getElementById('charts')
//
// if(charts) {
//     ReactDOM.render(<Charts/>, charts)
// }

require('alpinejs')


/*
 * Avatar upload preview
 */
const previewInput = document.getElementById('avatar-input')

let previewBlock = document.getElementById('imagePreview')

function previewAvatar(e) {
    previewBlock.style.display = 'block'
    previewBlock.src = URL.createObjectURL(e.target.files[0])
}
if (previewInput && previewBlock) {
    previewInput.addEventListener('change', previewAvatar)
}









