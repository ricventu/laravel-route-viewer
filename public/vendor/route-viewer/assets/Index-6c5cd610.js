import{q as i,j as e,w as d,g as n}from"./app-057b96cf.js";const h="/vendor/route-viewer/assets/github-mark-7a0dd11e.svg",o=({children:s})=>(i().props,e.jsxs("div",{className:"p-2",children:[e.jsxs("div",{className:"flex justify-between",children:[e.jsx("h1",{className:"mb-2 mt-0 text-3xl font-medium leading-tight text-primary",children:"Route Viewer"}),e.jsx("a",{href:"https://www.github.com/ricventu/laravel-route-viewer",target:"_blank",title:"View on Github",children:e.jsx("img",{src:h,alt:"View on Github",height:32,width:32})})]}),e.jsx("div",{className:"pt-2",children:s})]})),x=({route:s})=>{const r=s.computedMiddleware?s.computedMiddleware:s.action.middleware;return e.jsx("ul",{children:r.map((l,t)=>e.jsx("li",{children:l},t))})},p=({route:s})=>e.jsx("ul",{children:s.methods.map((r,l)=>e.jsx("li",{children:r},l))}),m=s=>{const[r,l]=d(s.filters.search||"","search"),t=a=>{l(a.target.value),n.get("",{search:a.target.value},{preserveState:!0})};return e.jsxs("div",{children:[e.jsx("div",{children:e.jsx("input",{type:"text",className:"border px-2",placeholder:"Search...",value:r,onChange:t})}),e.jsx("div",{className:"flex flex-col",children:e.jsx("div",{className:"overflow-x-auto sm:-mx-6 lg:-mx-8",children:e.jsx("div",{className:"inline-block min-w-full py-2 sm:px-6 lg:px-8",children:e.jsx("div",{className:"overflow-hidden",children:e.jsxs("table",{className:"min-w-full text-left text-sm font-light",children:[e.jsx("thead",{className:"border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600",children:e.jsxs("tr",{children:[e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Method"}),e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Uri"}),e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Name"}),e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Action"}),e.jsx("th",{scope:"col",className:"px-6 py-4",children:"Middleware"})]})}),e.jsx("tbody",{children:s.routes.map((a,c)=>e.jsxs("tr",{className:c%2===0?"border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700 hover:bg-blue-100 dark:hover:bg-blue-800":"border-b bg-white dark:border-neutral-500 dark:bg-neutral-600 hover:bg-blue-100 dark:hover:bg-blue-800",children:[e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:e.jsx(p,{route:a})}),e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:a.uri}),e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:a.action.as}),e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:a.action.controller}),e.jsx("td",{className:"whitespace-nowrap px-6 py-4",children:e.jsx(x,{route:a})})]},c))})]})})})})})]})};m.layout=s=>e.jsx(o,{children:s});export{m as default};