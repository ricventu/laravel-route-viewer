const MiddlewaresCell = ({ route }) => {

  const middlewares = route.computedMiddleware ?
    route.computedMiddleware : route.action.middleware

  if (!middlewares || !middlewares.map) {
    return null
  }
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
