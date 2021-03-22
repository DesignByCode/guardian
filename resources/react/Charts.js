import React, { useState } from 'react'
import Chart from "./components/Chart";

const Charts = () => {


    const [data] = useState({
        labels: ["12am-3am", "3am-6am", "6am-9am", "9am-12pm",
            "12pm-3pm", "3pm-6pm", "6pm-9pm", "9pm-12am"],

        datasets: [
            {
                name: "Some Data",
                // chartType: 'line',
                values: [25, 40, 30, 35, 8, 52, 17, -4]
            },
            {
                name: "Another Set",
                // chartType: 'line',
                values: [25, 50, -10, 15, 18, 32, 27, 14]
            },
            {
                name: "Yet Another",
                // chartType: 'line',
                values: [15, 20, -3, -15, 58, 12, -17, 37]
            }
        ]
    })


    return (
        <div className="wrapper--fluid">
            <div className="row">
                <div className="lg-col-4">
                    <div className="panel bg--white r-5 p-3">
                        <Chart height={325} title="First Chart" type="line" data={data}   />
                    </div>
                </div>
                <div className="lg-col-4">
                    <div className="panel bg--white r-5 p-3">
                        <Chart height={325} data={data} type="line"  />
                    </div>
                </div>
                <div className="lg-col-4">
                    <div className="panel bg--white r-5 p-3">
                        <Chart height={325} type="bar" data={data}  />
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Charts
