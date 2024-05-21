import React from 'react';
import axios from './axios'; 
import { useEffect, useState } from 'react';

export default function App() {
  const [data1, setData1] = useState('');

  useEffect(() => {
    (async () => {
      try {
        const res = await axios.get('/api/l');
        setData1(res.data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    })();
  }, []); 
  return (
    <div>
      <h1>{data1}</h1>
    </div>
  );
}
