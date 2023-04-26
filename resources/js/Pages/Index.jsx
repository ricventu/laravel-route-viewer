import React from 'react'
import { Head, router, useRemember } from '@inertiajs/react'
import Github from '../../images/github-mark.svg'

const Index = (props) => {
  const [search, setSearch] = useRemember(props.filters.search || '', 'search')

  const onSearch = (e) => {
    setSearch(e.target.value)
    router.get('', { search: e.target.value }, { preserveState: true })
  }

  return (
    <div>
      <Head title={'Routes'}/>

      <div className={'flex justify-between'}>
        <h1 className="mb-2 mt-0 text-3xl font-medium leading-tight text-primary">
          Route Viewer
        </h1>
        <div>
          <a href="https://www.github.com/ricventu/laravel-route-viewer" target="_blank">
            <img src={Github} alt="View on Github" height={48} width={48}/>
          </a>
        </div>
      </div>
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
                  <th scope="col" className="px-6 py-4">methods</th>
                  <th scope="col" className="px-6 py-4">uri</th>
                  <th scope="col" className="px-6 py-4">name</th>
                  <th scope="col" className="px-6 py-4">action</th>
                  <th scope="col" className="px-6 py-4">middleware</th>
                </tr>
                </thead>
                <tbody>
                {props.routes.map((route, index) => (
                  <tr key={index}
                      className={
                        index % 2 === 0 ?
                          'border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700'
                          :
                          'border-b bg-white dark:border-neutral-500 dark:bg-neutral-600'
                      }
                  >
                    <td
                      className="whitespace-nowrap px-6 py-4">{route.methods.reduce((prev, currentValue) => prev + ',' + currentValue, '').replace(/^,/, '')}</td>
                    <td className="whitespace-nowrap px-6 py-4">{route.uri}</td>
                    <td className="whitespace-nowrap px-6 py-4">{route.action.as}</td>
                    <td className="whitespace-nowrap px-6 py-4">{route.action.controller}</td>
                    <td
                      className="whitespace-nowrap px-6 py-4">{route.computedMiddleware?.reduce((prev, currentValue) => prev + ',' + currentValue, '').replace(/^,/, '')}</td>
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

export default Index
