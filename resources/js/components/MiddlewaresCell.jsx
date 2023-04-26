const MiddlewaresCell = ({ route }) => {

  const middlewares = route.computedMiddleware ?
    route.computedMiddleware : route.action.middleware

  return (
    <ul>
      {middlewares.map((middleware, index) => (
        <li key={index}>
          {middleware}
        </li>
      ))}
    </ul>
  )
}

export default MiddlewaresCell
