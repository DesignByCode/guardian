import React, { useState, useRef, useEffect } from 'react'
import PropTypes from 'prop-types'
import { Chart as Frappe } from "frappe-charts/dist/frappe-charts.min.esm"


const Chart = ({ type, title, height, colors, data }) => {

    const ch = useRef(null)

    const createChart = () => {
        new Frappe(ch.current, {  // or a DOM element,
            // new Chart() in case of ES6 module with above usage
            title,
            data,
            type, // or 'bar', 'line', 'pie', 'percentage', 'axis-mixed'
            height,
            colors,
            lineOptions: {
                hideDots: 1, // default: 0 - Hide dots
                hideLine: 0, // default: 0 - Hide main curves lines
                heatline: 1, // default: 0 - Gradient lines
                regionFill: 1, // default: 0 - Fill gradient curve background
                dotSize: 2, // default: 4 - Dot sizes
                spline: 1 // default: 0 Smooth curves
            },


        })
    }

    useEffect(() => {

        createChart()

    }, [createChart])


    return (
        <>
            <div ref={ch}/>
        </>
    )
}

Chart.propTypes = {
    data: PropTypes.object.isRequired,
    title: PropTypes.string,
    type: PropTypes.string.isRequired,
    height: PropTypes.number,
    colors: PropTypes.array,
}

Chart.defaultProps = {
    title: 'Add Title',
    height: 300,
    colors: ['#FED766', '#009FB7', '#121317'],
}

export default Chart
