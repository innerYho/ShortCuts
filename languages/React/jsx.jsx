
export default function jsx() {
    const [facturacion, setFacturacion] = useState('');
    const [cel_cli, setCel_cli] = useState('');
    const [email, setEmail] = useState('');
    const regExpEmail = /^[a-z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1}([a-z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1})*[a-z0-9]@[a-z0-9][-\.]{0,1}([a-z][-\.]{0,1})*[a-z0-9]\.[a-z0-9]{1,}([\.\-]{0,1}[a-z]){0,}[a-z0-9]{0,}$/;
    const [validateEmail, setValidateEmail] = useState(false);

    useEffect(() => {
        const resEmail = regExpEmail.test(email)
        setValidateEmail(resEmail)
        // console.log(resEmail)
        // console.log(email)
    }, [validateEmail, email]);

    // taked to 
    // https://github.com/asisteingenieria/heimdall-client/blob/0e9723b2d9056cde808382a88114354e78875559/src/components/campanaTYT/contado/AgenteContado.jsx

    return (
        <>
            {/* Selected value */}
            < div className="col-2" >
                <label className="label text-sm">Facturación</label>

                <select
                    className="select select-bordered w-full"
                    type="text"
                    required
                    onChange={(e) => setFacturacion(e.target.value || null)}
                    value={facturacion != null || facturacion != '' ? facturacion : ''}
                >
                    <option disabled value="">Seleccione</option>
                    <option value="NR">NR</option>
                    <option value="Movil">Movil</option>
                    <option value="Hogar">Hogar</option>
                    <option value="Venta Asistida">Venta Asistida</option>
                </select >
            </div >

            {/* numerical validation  */}
            <div className="col-span-2">
                <label className="label text-sm">Teléfono</label>
                <input
                    type="text"
                    pattern="[0-9]*"
                    placeholder=""
                    className="input input-bordered w-full "
                    required
                    value={cel_cli}
                    onChange={(e) => setCel_cli(
                        (v) =>
                            (e.target.validity.valid ? e.target.value : v)
                    )}
                />
            </div>


            <div className="col-span-3">
                <label className="label text-sm">Correo Electrónico</label>
                <input
                    type="text"
                    placeholder=""
                    className="input input-bordered w-full "
                    required
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                />
                {/* show error only when input is focused and validateEmail was wrong  */}
                <p className={email && !validateEmail ? "text-xl mr-1" : "hidden"}
                >
                    <FaTimesCircle />
                    El correo es incorrecto.
                </p>
            </div>

            {/* if email is true the button will be visible */}
            <div className="grid grid-cols-1 mt-4">
                <button
                    type='submit'
                    className={
                        validateEmail ? "btn btn-outline-success"
                            : 'hidden'
                    }
                // onClick={editContado}
                >
                    {id ? 'Guardar Actualización' : 'Guardar Registro'}
                </button>
            </div>

        </>
    )
}

