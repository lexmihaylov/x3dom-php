import sys
sys.path.append(r'/<path to blender folder>/scripts/addons/io_scene_x3d/')

import bpy
from bpy_extras.io_utils import axis_conversion
import import_x3d

global_matrix = axis_conversion('-Y','Z','-Z','Y').to_4x4()

import_x3d.load_web3d('< path to x3d file >',
	       PREF_FLAT=True,
               PREF_CIRCLE_DIV=16,
	       global_matrix = global_matrix
	)

bpy.context.scene.camera = bpy.data.objects['Viewpoint']
