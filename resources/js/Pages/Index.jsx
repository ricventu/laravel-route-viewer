import React from 'react'

const Index = (props) => {
console.log(props)
  return (
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
          <td>{route.methods.reduce((prev, currentValue) => prev + ',' + currentValue, '').replace(/^,/,'')}</td>
          <td>{route.uri}</td>
          <td>{route.action.as}</td>
          <td>{route.action.controller}</td>
          <td>{route.computedMiddleware?.reduce((prev, currentValue) => prev + ',' + currentValue, '').replace(/^,/,'')}</td>
        </tr>

      ))}
      </tbody>
    </table>
  )
}

export default Index
