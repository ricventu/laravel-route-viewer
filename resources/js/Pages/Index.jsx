import React from 'react'
import { Head, router, useRemember } from '@inertiajs/react'

const Index = (props) => {
  const [search, setSearch] = useRemember(props.filters.search)

  const onSearch = (e) => {
    setSearch(e.target.value)
    router.get('', { search: e.target.value }, { preserveState: true })
  }

  return (
    <div>
      <Head title={'Routes'}/>

      <div>
        <h1 className={'text-3xl'}>Routes</h1>
        <input type="text" className={'border px-2'} placeholder={'Search...'} value={search} onChange={onSearch}/>
      </div>
      <table>
        <thead>
        <tr>
          <td>methods</td>
          <td>uri</td>
          <td>name</td>
          <td>action</td>
          <td>middleware</td>
        </tr>
        </thead>
        <tbody>
        {props.routes.map((route, index) => (
          <tr key={index}>
            <td>{route.methods.reduce((prev, currentValue) => prev + ',' + currentValue, '').replace(/^,/, '')}</td>
            <td>{route.uri}</td>
            <td>{route.action.as}</td>
            <td>{route.action.controller}</td>
            <td>{route.computedMiddleware?.reduce((prev, currentValue) => prev + ',' + currentValue, '').replace(/^,/, '')}</td>
          </tr>

        ))}
        </tbody>
      </table>
    </div>
  )
}

export default Index
