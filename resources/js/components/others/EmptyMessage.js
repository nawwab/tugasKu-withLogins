import React from "react";

function EmptyMessage() {
   return (
      <div className="hidden lg:flex lg:items-center">
         <svg
            className="w-10 h-10 mr-8 stroke-current text-blue-500"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
         >
            <path
               strokeLinecap="round"
               strokeLinejoin="round"
               strokeWidth="2"
               d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
            ></path>
         </svg>
         <span className="text-center leading-tight text-xl">
            Data tidak ditemukan (hooray?), silahkan lihat{" "}
            <a className="font-semibold text-blue-500 underline" href="/help">
               panduan
            </a>{" "}
            mengapa data tidak ditemukan
         </span>
      </div>
   );
}

export default EmptyMessage;
