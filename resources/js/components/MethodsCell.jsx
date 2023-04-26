const MethodsCell = ({route}) => {

  return (
    <ul>
      {route.methods.map((middleware, index) => (
        <li key={index}>
          {middleware}
        </li>
      ))}
    </ul>
  )
}

export default MethodsCell
