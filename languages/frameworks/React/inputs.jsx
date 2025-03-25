
export default function Inputs() {
  let adicionalesCheck = [];
    
    const [hbo, setHbo] = useState(false);
   const [arrayDirec, setArrayDirec] = useState([]);
   const setValidDirec=(value,index)=>{
    let copyArrayDirec = arrayDirec
    copyArrayDirec[2]="#"
   console.log("copy",copyArrayDirec)
   copyArrayDirec[index]=value
   setArrayDirec((prevArray)=>[...copyArrayDirec])
 }

 const submitHogar = async (e) => {
    try {
      e.preventDefault();

      if (!id) {
        setIsLoading(true);

        let res = await axios.post(`${url}/create`, {
 contador_adicionales: adicionalesCheck.length,
            paquete_adicionales: adicionalesCheck.toString()
        });
     
    return (
        <>
            <form action="">
                <div className="col-span-4">
                    <label className="label text-sm">Dirección de entrega</label>
                    <input
                        type="text"
                        className="input input-bordered w-full"
                        value={arrayDirec.length > 0 ? arrayDirec.join(" ") : direccion_e != "" ? direccion_e : ""}
                        readOnly
                    />
                </div>
                <div className="col-span-1">
                    <label className="label text-sm">Via principal</label>
                    <select
                        className="select select-bordered w-full"
                        value={
                            viaPrincipal != null || viaPrincipal != "" ? viaPrincipal : ""
                        }
                        onChange={(e) => {
                            setViaPrincipal(e.target.value || "")
                            setValidDirec(e.target.value, 0)
                        }}
                    // required
                    >
                        <option value="">N/A</option>
                        {elementos.viaPrincipal.map((item, index) => {
                            return (
                                <option key={index} value={item}>
                                    {item}
                                </option>
                            );
                        })}
                    </select>
                </div>
                <div className="col-span-1">
            <label className="label text-sm">Número</label>
            <input
              type="text"
              maxLength={10}
              className="input input-bordered w-full"
              value={numero1}
              onChange={(e) => {
                setNumero1(e.target.value)
                setValidDirec(e.target.value, 1)
              }
              }
            />
          </div>

                {/* check values */}
                <div className="col-span-2">
            <label className="label text-sm">Adicionales</label>
            <input
              type="text"
              className="input input-bordered w-full"
              value={adicionalesCheck.length}
              readOnly
            />
          </div>
          <div className="col-span-6">
            <label className="label text-sm mt-5"></label>
            <input
              type="text"
              className="input input-bordered w-full"
              value={adicionalesCheck.join(", ")}
              readOnly
            />
                </div>
                {adicionales === "Si" && (
            <>
              <div className="col-span-2">
                <label className="label cursor-pointer">
                  <img
                    alt=""
                    src={require("../../assets/images/general/HBO.png")}
                    className="w-10"
                  />
                  <span className="label-text">HBO</span>
                  <input
                    type="checkbox"
                    className="checkbox"
                    value={hbo}
                    onChange={(e) => setHbo(e.target.checked ? true : false)}
                    defaultChecked={
                      hbo === "1" || hbo === true
                        ? adicionalesCheck.push("HBO")
                        : false
                    }
                  />
                </label>
                        </div>
                        
                    </>          
                )}
            </form>
        </>
    )
}