import{j as e,w as i,g as d}from"./app-d50ee8ab.js";const n="/vendor/route-viewer/assets/github-mark-7a0dd11e.svg",h=({children:s})=>e.jsxs("div",{className:"px-2 pt-2",children:[e.jsxs("div",{className:"flex justify-between px-6",children:[e.jsx("h1",{className:"mb-2 mt-0 text-3xl font-medium leading-tight text-primary",children:"Route Viewer"}),e.jsx("a",{href:"https://www.github.com/ricventu/laravel-route-viewer",target:"_blank",title:"View on Github",children:e.jsx("img",{src:n,alt:"View on Github",height:32,width:32})})]}),e.jsx("div",{className:"pt-2",children:s})]}),x=({route:s})=>{const l=s.computedMiddleware?s.computedMiddleware:s.action.middleware;return e.jsx("ul",{children:l.map((r,t)=>e.jsx("li",{children:r},t))})},o=({route:s})=>e.jsx("ul",{children:s.methods.map((l,r)=>e.jsx("li",{children:l},r))}),p=s=>{const[l,r]=i(s.filters.search||"","search"),t=a=>{r(a.target.value),d.get("",{search:a.target.value},{preserveState:!0})};return e.jsxs("div",{children:[e.jsx("div",{className:"flex px-6",children:e.jsx("input",{type:"text",className:"border px-2 w-96",placeholder:"Search...",value:l,onChange:t})}),e.jsx("div",{className:"flex flex-col",children:e.jsx("div",{className:"overflow-x-auto sm:-mx-6 lg:-mx-8",children:e.jsx("div",{className:"inline-block min-w-full py-2 sm:px-6 lg:px-8",children:e.jsx("div",{className:"overflow-hidden",children:e.jsxs("table",{className:"min-w-full text-left text-sm font-light",children:[e.jsx("thead",{className:"border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600",children:e.jsxs("tr",{children:[e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Method"}),e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Uri"}),e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Name"}),e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Action"}),e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Middleware"})]})}),e.jsx("tbody",{children:s.routes.map((a,c)=>e.jsxs("tr",{className:c%2===0?"border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700 hover:bg-blue-100 dark:hover:bg-blue-800":"border-b bg-white dark:border-neutral-500 dark:bg-neutral-600 hover:bg-blue-100 dark:hover:bg-blue-800",children:[e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:e.jsx(o,{route:a})}),e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:a.uri}),e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:a.action.as}),e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:a.action.controller}),e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:e.jsx(x,{route:a})})]},c))})]})})})})})]})};p.layout=s=>e.jsx(h,{children:s});export{p as default};
