import React, { useEffect, useRef, useState } from "react";
// import PropTypes from "prop-types";
import ReactDOM from "react-dom";

function FileInput({value}) {
   let fileInput = useRef(null);
   let [file, setFile] = useState(value ? value : null);

   useEffect(() => {
      console.log('value :' + value);
      console.log('file: ' + file)
      console.log('fileExist: ' + file ? true : false)
   });

   function deleteFile() {
      fileInput.current.value = null;
      setFile(null);
   }

   function fileOnChange(e) {
      const file = e.target.files[0];
      setFile(file.name);
   }

   return (
      <div>
         <div className={`${file ? "flex" : "hidden"} items-center`}>
            <span className="p-2 rounded border bg-gray-100 mr-2">{file}</span>
            <svg
               onClick={deleteFile}
               className="w-6 h-6 stroke-current text-red-500"
               fill="none"
               stroke="currentColor"
               viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg"
            >
               <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth="2"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
               ></path>
            </svg>
         </div>
         <label
            htmlFor="file_attachments"
            className={`${file ? "hidden" : "flex"}`}
         >
            <div className="flex items-center p-2 bg-gray-100 border rounded">
               <svg
                  className="w-6 h-6  mr-2"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
               >
                  <path
                     strokeLinecap="round"
                     strokeLinejoin="round"
                     strokeWidth="2"
                     d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                  ></path>
               </svg>
               Tambahkan File
               <input
                  className="opacity-0 absolute inline-block w-40 h-full"
                  ref={fileInput}
                  onChange={fileOnChange}
                  type="file"
                  name="file_attachments"
                  id="file_attachments"
               />
            </div>
         </label>
         {!file ? (
            <input
               className="hidden"
               type="text"
               defaultValue="True"
               name="is_empty"
               id="is_empty"
            />
         ) : null}
      </div>
   );
}

export default FileInput;

if (document.getElementById("file-input")) {
   const file = document.getElementById("file-input").getAttribute("file");
   console.log(typeof file)
   ReactDOM.render(
      <FileInput value={file} />,
      document.getElementById("file-input")
   );
}
