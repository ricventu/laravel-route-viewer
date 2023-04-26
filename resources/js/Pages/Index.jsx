import React from 'react'
import { router, useRemember } from '@inertiajs/react'
import Layout from '../Layout/Layout'
import MiddlewaresCell from '../components/MiddlewaresCell'
import MethodsCell from '../components/MethodsCell'

const Index = (props) => {
  const [search, setSearch] = useRemember(props.filters.search || '', 'search')

  const onSearch = (e) => {
    setSearch(e.target.value)
    router.get('', { search: e.target.value }, { preserveState: true })
  }
  console.log(props.routes)
  return (
    <div>
      <div>
        <input type="text" className={'border px-2'} placeholder={'Search...'} value={search} onChange={onSearch}/>
      </div>
      <div className="flex flex-col">
        <div className="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div className="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div className="overflow-hidden">
              <table className="min-w-full text-left text-sm font-light">
                <thead className="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                <tr>
                  <th scope="col" className="px-6 py-4">Method</th>
                  <th scope="col" className="px-6 py-4">Uri</th>
                  <th scope="col" className="px-6 py-4">Name</th>
                  <th scope="col" className="px-6 py-4">Action</th>
                  <th scope="col" className="px-6 py-4">Middleware</th>
                </tr>
                </thead>
                <tbody>
                {props.routes.map((route, index) => (
                  <tr key={index}
                      className={
                        index % 2 === 0 ?
                          'border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700 hover:bg-blue-100 dark:hover:bg-blue-800'
                          :
                          'border-b bg-white dark:border-neutral-500 dark:bg-neutral-600 hover:bg-blue-100 dark:hover:bg-blue-800'
                      }
                  >
                    <td className="whitespace-nowrap px-6 py-4"><MethodsCell route={route}/></td>
                    <td className="whitespace-nowrap px-6 py-4">{route.uri}</td>
                    <td className="whitespace-nowrap px-6 py-4">{route.action.as}</td>
                    <td className="whitespace-nowrap px-6 py-4">{route.action.controller}</td>
                    <td className="whitespace-nowrap px-6 py-4"><MiddlewaresCell route={route}/></td>
                  </tr>
                ))}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}

Index.layout = page => <Layout children={page}/>

export default Index
