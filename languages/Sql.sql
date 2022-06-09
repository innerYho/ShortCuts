-- Read data
-- Find duplicate records 
SELECT 'field' FROM 'table' group by 'field' having count(*) >= 2
SELECT ccf_id_agent FROM beneficiario_ccf group by ccf_id_agent having count(*) >= 2


-- Update
-- Unique value in table
ALTER TABLE `beneficiario_ccf` ADD UNIQUE(`ccf_id_agent`)