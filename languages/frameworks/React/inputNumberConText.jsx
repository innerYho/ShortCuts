<div className="col-span-2">
  <label className="label text-sm">Valor total equipo con IVA</label>
  <input
    type="text"
    pattern="[0-9]*"
    maxLength={20}
    className="input input-bordered w-full "
    value={total_con_iva}
    onChange={(e) =>
      setTotal_con_iva((v) => (e.target.validity.valid ? e.target.value : v))
    }
  />
</div>;
