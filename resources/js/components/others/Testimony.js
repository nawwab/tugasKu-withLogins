import React from "react";

function Testimony() {
   return (
      <div className="justify-between hidden lg:flex">
         <div className="flex flex-col items-center w-3/12">
            <svg
               className="w-10 h-10 mb-2 stroke-current text-blue-500"
               fill="none"
               stroke="currentColor"
               viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg"
            >
               <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth="2"
                  d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"
               ></path>
            </svg>
            <span className="text-center leading-tight text-sm">
               Tak perlu login, Cukup gunakan fitur pencarian diatas ini
            </span>
         </div>
         <div className="flex flex-col items-center w-3/12">
            <svg
               className="w-10 h-10 mb-2 stroke-current text-blue-500"
               fill="none"
               stroke="currentColor"
               viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg"
            >
               <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
               ></path>
               <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
               ></path>
            </svg>
            <span className="text-center leading-tight text-sm">
               Pengampu bisa melihat lebih luas & mulai mengkondisikan
               pembelajaran
            </span>
         </div>
         <div className="flex flex-col items-center w-3/12">
            <svg
               className="w-10 h-10 mb-2 stroke-current text-blue-500"
               fill="none"
               stroke="currentColor"
               viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg"
            >
               <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth="2"
                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
               ></path>
            </svg>
            <span className="text-center leading-tight text-sm">
               Dibuat dan dipelihara oleh, dari, dan untuk Mahasiswa
            </span>
         </div>
      </div>
   );
}

export default Testimony;
