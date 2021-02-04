import React from "react";

function AdminNoDataFound() {
   return (
      <div className="hidden lg:flex lg:items-center">
         <svg
            className="w-10 h-16 mr-10 stroke-current text-blue-500"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
         >
            <path
               strokeLinecap="round"
               strokeLinejoin="round"
               strokeWidth="2"
               d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
            ></path>
         </svg>
         <span className="text-center leading-tight text-xl">
            Cari kartu yang ada di kolom pencarian dan klik
            <span className="font-semibold text-blue-500"> &gt; </span>
            untuk edit dan hapus
         </span>
      </div>
   );
}

export default AdminNoDataFound;
