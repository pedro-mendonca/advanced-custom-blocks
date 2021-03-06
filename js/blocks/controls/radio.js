import updatePreview from "../loader/preview";

const { RadioControl } = wp.components;

const ACBRadioControl = ( props, field, block ) => {
	const { setAttributes } = props
	const attr = { ...props.attributes }
	return (
		<RadioControl
			label={field.label}
			help={field.help}
			selected={attr[ field.name ] || field.default}
			options={field.options}
			onChange={radioControl => {
				attr[ field.name ] = radioControl
				setAttributes( attr )
			}}
			onBlur={
				updatePreview( props, block )
			}
		/>
	)
}

export default ACBRadioControl