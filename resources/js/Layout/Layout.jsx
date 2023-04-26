import React from 'react'
import { usePage } from '@inertiajs/react'
import Github from '../../images/github-mark.svg'

const Layout = ({children}) => {
  const props = usePage().props

  return (
    <div className={'p-2'}>
      <div className={'flex justify-between'}>
        <h1 className="mb-2 mt-0 text-3xl font-medium leading-tight text-primary">
          Route Viewer
        </h1>
        <a href="https://www.github.com/ricventu/laravel-route-viewer" target="_blank" title={'View on Github'}>
          <img src={Github} alt="View on Github" height={32} width={32}/>
        </a>
      </div>
      <div className={'pt-2'}>
        {children}
      </div>
    </div>
  )
}

export default Layout
