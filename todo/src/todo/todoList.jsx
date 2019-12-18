import React from 'react'
import IconButton from '../template/iconButton'

export default props => {
    const renderRows = () => {
        const list = props.list || []
        return list.map( todo => (
            <tr key={todo.id}>
                <td>
                    { todo.description }
                    <td>
                        <IconButton style='danger' icon='trash-o' onClick={()=>props.handleRemove(todo)}></IconButton>
                    </td>
                </td>
            </tr>
        ))
    }
    
    return(
        <table className='table'>
            <thead>
                <tr>
                    <th>Decription</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                { renderRows() }
            </tbody>
        </table>
    )
}