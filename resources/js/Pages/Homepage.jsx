import React from 'react';
import { Link, Head } from '@inertiajs/react';

export default function Homepage(props) {
    console.log(props)
    return (
        <div className='flex justify-center items-center min-h-screen bg-slate-500 text-white text-2xl '>
            <Head title={props.title} />
            <h1>{props.description}</h1>
            {props.menu ? props.menu.map((data, i) => {
                return (
                    <div key={i} className='p-4 m-2 bg-white text-black shadow-md border rounded-md'>
                        <p><img src='{data.image}' /></p>
                        <p className='text-2xl'>{data.name}</p>
                        <p className='text-sm'>{data.category}</p>
                        {/* <p>{data.description}</p> */}
                        <p>{data.price}</p>
                    </div>
                )
            }) : <p className='text-white text-3xl'>Belum ada menu</p>}
        </div>
    )
}