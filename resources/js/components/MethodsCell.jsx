const MethodsCell = ({route}) => {
  return (
    <ul>
      {route.methods?.map((method, index) => (
        <li key={index}>
          {method}
        </li>
      ))}
    </ul>
  )
}

export default MethodsCell
